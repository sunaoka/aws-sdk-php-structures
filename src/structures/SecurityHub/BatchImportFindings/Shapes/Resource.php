<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Id
 * @property 'aws'|'aws-cn'|'aws-us-gov' $Partition
 * @property string $Region
 * @property string $ResourceRole
 * @property array<string, string> $Tags
 * @property DataClassificationDetails $DataClassification
 * @property ResourceDetails $Details
 * @property string $ApplicationName
 * @property string $ApplicationArn
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Id: string,
     *     Partition?: 'aws'|'aws-cn'|'aws-us-gov',
     *     Region?: string,
     *     ResourceRole?: string,
     *     Tags?: array<string, string>,
     *     DataClassification?: DataClassificationDetails,
     *     Details?: ResourceDetails,
     *     ApplicationName?: string,
     *     ApplicationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
