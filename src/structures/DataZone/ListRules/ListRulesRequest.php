<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property list<string> $assetTypes
 * @property bool $dataProduct
 * @property string $domainIdentifier
 * @property bool $includeCascaded
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $projectIds
 * @property 'METADATA_FORM_ENFORCEMENT' $ruleType
 * @property string $targetIdentifier
 * @property 'DOMAIN_UNIT' $targetType
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     action?: 'CREATE_SUBSCRIPTION_REQUEST',
     *     assetTypes?: list<string>,
     *     dataProduct?: bool,
     *     domainIdentifier: string,
     *     includeCascaded?: bool,
     *     maxResults?: int,
     *     nextToken?: string,
     *     projectIds?: list<string>,
     *     ruleType?: 'METADATA_FORM_ENFORCEMENT',
     *     targetIdentifier: string,
     *     targetType: 'DOMAIN_UNIT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
