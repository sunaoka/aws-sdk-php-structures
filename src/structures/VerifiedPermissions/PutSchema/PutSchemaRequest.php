<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\PutSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property Shapes\SchemaDefinition $definition
 */
class PutSchemaRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     definition: Shapes\SchemaDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
