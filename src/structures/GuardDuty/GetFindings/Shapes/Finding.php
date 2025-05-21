<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Arn
 * @property double|null $Confidence
 * @property string $CreatedAt
 * @property string|null $Description
 * @property string $Id
 * @property string|null $Partition
 * @property string $Region
 * @property ResourceShape $Resource
 * @property string $SchemaVersion
 * @property Service|null $Service
 * @property double $Severity
 * @property string|null $Title
 * @property string $Type
 * @property string $UpdatedAt
 * @property string|null $AssociatedAttackSequenceArn
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     Arn: string,
     *     Confidence?: double|null,
     *     CreatedAt: string,
     *     Description?: string|null,
     *     Id: string,
     *     Partition?: string|null,
     *     Region: string,
     *     Resource: ResourceShape,
     *     SchemaVersion: string,
     *     Service?: Service|null,
     *     Severity: double,
     *     Title?: string|null,
     *     Type: string,
     *     UpdatedAt: string,
     *     AssociatedAttackSequenceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
