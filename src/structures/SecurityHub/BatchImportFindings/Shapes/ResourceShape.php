<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Id
 * @property 'aws'|'aws-cn'|'aws-us-gov'|'aws-us-iso'|'aws-us-iso-b'|'AzureCloud'|null $Partition
 * @property string|null $Region
 * @property 'Azure'|'AWS'|null $Provider
 * @property ResourceOwner|null $Owner
 * @property string|null $ResourceRole
 * @property array<string, string>|null $Tags
 * @property DataClassificationDetails|null $DataClassification
 * @property ResourceDetails|null $Details
 * @property string|null $ApplicationName
 * @property string|null $ApplicationArn
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Id: string,
     *     Partition?: 'aws'|'aws-cn'|'aws-us-gov'|'aws-us-iso'|'aws-us-iso-b'|'AzureCloud'|null,
     *     Region?: string|null,
     *     Provider?: 'Azure'|'AWS'|null,
     *     Owner?: ResourceOwner|null,
     *     ResourceRole?: string|null,
     *     Tags?: array<string, string>|null,
     *     DataClassification?: DataClassificationDetails|null,
     *     Details?: ResourceDetails|null,
     *     ApplicationName?: string|null,
     *     ApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
