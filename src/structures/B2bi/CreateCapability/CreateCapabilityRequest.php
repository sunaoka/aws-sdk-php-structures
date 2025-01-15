<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'edi' $type
 * @property Shapes\CapabilityConfiguration $configuration
 * @property list<Shapes\S3Location>|null $instructionsDocuments
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCapabilityRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'edi',
     *     configuration: Shapes\CapabilityConfiguration,
     *     instructionsDocuments?: list<Shapes\S3Location>|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
