<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capabilityId
 * @property string $name
 * @property Shapes\CapabilityConfiguration $configuration
 * @property list<Shapes\S3Location> $instructionsDocuments
 */
class UpdateCapabilityRequest extends Request
{
    /**
     * @param array{
     *     capabilityId: string,
     *     name?: string,
     *     configuration?: Shapes\CapabilityConfiguration,
     *     instructionsDocuments?: list<Shapes\S3Location>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
