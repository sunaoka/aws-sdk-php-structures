<?php

namespace Sunaoka\Aws\Structures\ConnectCases;

class ConnectCasesClient extends \Aws\ConnectCases\ConnectCasesClient
{
    use BatchGetCaseRule\BatchGetCaseRuleTrait;
    use BatchGetField\BatchGetFieldTrait;
    use BatchPutFieldOptions\BatchPutFieldOptionsTrait;
    use CreateCase\CreateCaseTrait;
    use CreateCaseRule\CreateCaseRuleTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateField\CreateFieldTrait;
    use CreateLayout\CreateLayoutTrait;
    use CreateRelatedItem\CreateRelatedItemTrait;
    use CreateTemplate\CreateTemplateTrait;
    use DeleteCase\DeleteCaseTrait;
    use DeleteCaseRule\DeleteCaseRuleTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteField\DeleteFieldTrait;
    use DeleteLayout\DeleteLayoutTrait;
    use DeleteRelatedItem\DeleteRelatedItemTrait;
    use DeleteTemplate\DeleteTemplateTrait;
    use GetCase\GetCaseTrait;
    use GetCaseAuditEvents\GetCaseAuditEventsTrait;
    use GetCaseEventConfiguration\GetCaseEventConfigurationTrait;
    use GetDomain\GetDomainTrait;
    use GetLayout\GetLayoutTrait;
    use GetTemplate\GetTemplateTrait;
    use ListCaseRules\ListCaseRulesTrait;
    use ListCasesForContact\ListCasesForContactTrait;
    use ListDomains\ListDomainsTrait;
    use ListFieldOptions\ListFieldOptionsTrait;
    use ListFields\ListFieldsTrait;
    use ListLayouts\ListLayoutsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTemplates\ListTemplatesTrait;
    use PutCaseEventConfiguration\PutCaseEventConfigurationTrait;
    use SearchAllRelatedItems\SearchAllRelatedItemsTrait;
    use SearchCases\SearchCasesTrait;
    use SearchRelatedItems\SearchRelatedItemsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCase\UpdateCaseTrait;
    use UpdateCaseRule\UpdateCaseRuleTrait;
    use UpdateField\UpdateFieldTrait;
    use UpdateLayout\UpdateLayoutTrait;
    use UpdateTemplate\UpdateTemplateTrait;
}
