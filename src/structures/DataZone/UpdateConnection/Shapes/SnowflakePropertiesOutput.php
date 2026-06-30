<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $snowflakeRole
 * @property IdentityMapping $identityMapping
 * @property LineageSyncOutput $lineageSync
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED' $status
 * @property string|null $errorMessage
 */
class SnowflakePropertiesOutput extends Shape
{
    /**
     * @param array{
     *     snowflakeRole: string,
     *     identityMapping: IdentityMapping,
     *     lineageSync: LineageSyncOutput,
     *     status: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED',
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
