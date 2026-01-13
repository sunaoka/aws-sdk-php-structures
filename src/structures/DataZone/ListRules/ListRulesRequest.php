<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'DOMAIN_UNIT' $targetType
 * @property string $targetIdentifier
 * @property 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT'|null $ruleType
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST'|null $action
 * @property list<string>|null $projectIds
 * @property list<string>|null $assetTypes
 * @property bool|null $dataProduct
 * @property bool|null $includeCascaded
 * @property int<25, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     targetType: 'DOMAIN_UNIT',
     *     targetIdentifier: string,
     *     ruleType?: 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT'|null,
     *     action?: 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST'|null,
     *     projectIds?: list<string>|null,
     *     assetTypes?: list<string>|null,
     *     dataProduct?: bool|null,
     *     includeCascaded?: bool|null,
     *     maxResults?: int<25, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
