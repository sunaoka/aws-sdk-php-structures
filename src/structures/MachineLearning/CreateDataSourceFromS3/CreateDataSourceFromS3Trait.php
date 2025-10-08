<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromS3;

trait CreateDataSourceFromS3Trait
{
    /**
     * @param CreateDataSourceFromS3Request $args
     * @return CreateDataSourceFromS3Response
     */
    public function createDataSourceFromS3(CreateDataSourceFromS3Request $args)
    {
        $result = parent::createDataSourceFromS3($args->toArray());
        return new CreateDataSourceFromS3Response($result->toArray());
    }
}
