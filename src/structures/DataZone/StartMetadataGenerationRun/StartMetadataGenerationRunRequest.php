<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $owningProjectIdentifier
 * @property Shapes\MetadataGenerationRunTarget $target
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 * @property list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null $types
 */
class StartMetadataGenerationRunRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     owningProjectIdentifier: string,
     *     target: Shapes\MetadataGenerationRunTarget,
     *     type?: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null,
     *     types?: list<'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
