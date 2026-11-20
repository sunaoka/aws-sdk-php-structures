<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationalUnitId
 * @property list<string>|null $accountIds
 */
class SourceAwsOrgUnit extends Shape
{
    /**
     * @param array{
     *     organizationalUnitId: string,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
