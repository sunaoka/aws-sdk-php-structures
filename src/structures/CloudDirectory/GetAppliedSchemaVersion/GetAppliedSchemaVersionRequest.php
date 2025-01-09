<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetAppliedSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 */
class GetAppliedSchemaVersionRequest extends Request
{
    /**
     * @param array{SchemaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
