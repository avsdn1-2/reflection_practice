<?php


namespace Documentor\Service;


class FileInfoService implements InfoServiceInterface
{
    /** @var bool */
    private $dryRun;

    /** @var string */
    private $filename;

    public function setFilename(string $filename)
    {
        $this->filename = $filename;
        return $this;
    }

    public function isDryRun(bool $dryRun)
    {
        $this->dryRun = $dryRun;
        return $this;
    }

    public function getInfo(): array
    {
        echo $this->filename;
        return [];
    }
}