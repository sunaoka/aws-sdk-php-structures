<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateModelManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $nodesToAdd
 * @property list<string>|null $nodesToRemove
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null $status
 */
class UpdateModelManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     nodesToAdd?: list<string>|null,
     *     nodesToRemove?: list<string>|null,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
