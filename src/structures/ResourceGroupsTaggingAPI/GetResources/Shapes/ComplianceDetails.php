<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $NoncompliantKeys
 * @property list<string>|null $KeysWithNoncompliantValues
 * @property bool|null $ComplianceStatus
 */
class ComplianceDetails extends Shape
{
    /**
     * @param array{
     *     NoncompliantKeys?: list<string>|null,
     *     KeysWithNoncompliantValues?: list<string>|null,
     *     ComplianceStatus?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
