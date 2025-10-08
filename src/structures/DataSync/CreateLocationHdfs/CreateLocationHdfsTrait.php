<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationHdfs;

trait CreateLocationHdfsTrait
{
    /**
     * @param CreateLocationHdfsRequest $args
     * @return CreateLocationHdfsResponse
     */
    public function createLocationHdfs(CreateLocationHdfsRequest $args)
    {
        $result = parent::createLocationHdfs($args->toArray());
        return new CreateLocationHdfsResponse($result->toArray());
    }
}
