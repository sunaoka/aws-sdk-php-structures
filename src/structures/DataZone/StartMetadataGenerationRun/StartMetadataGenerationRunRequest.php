<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 * @property list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null $types
 * @property Shapes\MetadataGenerationRunTarget $target
 * @property string|null $clientToken
 * @property string $owningProjectIdentifier
 */
class StartMetadataGenerationRunRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     type?: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null,
     *     types?: list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null,
     *     target: Shapes\MetadataGenerationRunTarget,
     *     clientToken?: string|null,
     *     owningProjectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
