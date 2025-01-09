<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteDataLakeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property list<AwsLogSourceResource> $sources
 */
class DataLakeAutoEnableNewAccountConfiguration extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     sources: list<AwsLogSourceResource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
