<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null $type
 */
class GetMetadataGenerationRunRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     type?: 'BUSINESS_DESCRIPTIONS'|'BUSINESS_NAMES'|'BUSINESS_GLOSSARY_ASSOCIATIONS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
