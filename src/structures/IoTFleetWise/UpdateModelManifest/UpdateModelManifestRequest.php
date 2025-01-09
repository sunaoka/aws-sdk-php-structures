<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateModelManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $nodesToAdd
 * @property list<string> $nodesToRemove
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING' $status
 */
class UpdateModelManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     nodesToAdd?: list<string>,
     *     nodesToRemove?: list<string>,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
