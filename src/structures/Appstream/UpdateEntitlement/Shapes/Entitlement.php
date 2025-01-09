<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $StackName
 * @property string $Description
 * @property 'ALL'|'ASSOCIATED' $AppVisibility
 * @property list<EntitlementAttribute> $Attributes
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class Entitlement extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     StackName: string,
     *     Description?: string,
     *     AppVisibility: 'ALL'|'ASSOCIATED',
     *     Attributes: list<EntitlementAttribute>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
