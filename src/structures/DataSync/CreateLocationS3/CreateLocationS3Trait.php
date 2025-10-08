<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationS3;

trait CreateLocationS3Trait
{
    /**
     * @param CreateLocationS3Request $args
     * @return CreateLocationS3Response
     */
    public function createLocationS3(CreateLocationS3Request $args)
    {
        $result = parent::createLocationS3($args->toArray());
        return new CreateLocationS3Response($result->toArray());
    }
}
