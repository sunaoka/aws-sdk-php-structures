<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $NoncompliantKeys
 * @property list<string> $KeysWithNoncompliantValues
 * @property bool $ComplianceStatus
 */
class ComplianceDetails extends Shape
{
    /**
     * @param array{
     *     NoncompliantKeys?: list<string>,
     *     KeysWithNoncompliantValues?: list<string>,
     *     ComplianceStatus?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
