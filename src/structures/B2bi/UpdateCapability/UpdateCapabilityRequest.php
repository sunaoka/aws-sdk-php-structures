<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capabilityId
 * @property string|null $name
 * @property Shapes\CapabilityConfiguration|null $configuration
 * @property list<Shapes\S3Location>|null $instructionsDocuments
 */
class UpdateCapabilityRequest extends Request
{
    /**
     * @param array{
     *     capabilityId: string,
     *     name?: string|null,
     *     configuration?: Shapes\CapabilityConfiguration|null,
     *     instructionsDocuments?: list<Shapes\S3Location>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
