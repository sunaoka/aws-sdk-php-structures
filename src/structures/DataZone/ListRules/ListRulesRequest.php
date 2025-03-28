<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST'|null $action
 * @property list<string>|null $assetTypes
 * @property bool|null $dataProduct
 * @property string $domainIdentifier
 * @property bool|null $includeCascaded
 * @property int<25, 50>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $projectIds
 * @property 'METADATA_FORM_ENFORCEMENT'|null $ruleType
 * @property string $targetIdentifier
 * @property 'DOMAIN_UNIT' $targetType
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     action?: 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST'|null,
     *     assetTypes?: list<string>|null,
     *     dataProduct?: bool|null,
     *     domainIdentifier: string,
     *     includeCascaded?: bool|null,
     *     maxResults?: int<25, 50>|null,
     *     nextToken?: string|null,
     *     projectIds?: list<string>|null,
     *     ruleType?: 'METADATA_FORM_ENFORCEMENT'|null,
     *     targetIdentifier: string,
     *     targetType: 'DOMAIN_UNIT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
