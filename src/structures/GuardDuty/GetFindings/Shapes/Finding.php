<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Arn
 * @property double $Confidence
 * @property string $CreatedAt
 * @property string $Description
 * @property string $Id
 * @property string $Partition
 * @property string $Region
 * @property Resource $Resource
 * @property string $SchemaVersion
 * @property Service $Service
 * @property double $Severity
 * @property string $Title
 * @property string $Type
 * @property string $UpdatedAt
 * @property string $AssociatedAttackSequenceArn
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     Arn: string,
     *     Confidence?: double,
     *     CreatedAt: string,
     *     Description?: string,
     *     Id: string,
     *     Partition?: string,
     *     Region: string,
     *     Resource: Resource,
     *     SchemaVersion: string,
     *     Service?: Service,
     *     Severity: double,
     *     Title?: string,
     *     Type: string,
     *     UpdatedAt: string,
     *     AssociatedAttackSequenceArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
