<?php

namespace Sunaoka\Aws\Structures\ConnectCases;

class ConnectCasesClient extends \Aws\ConnectCases\ConnectCasesClient
{
    use BatchGetField\BatchGetFieldTrait;
    use BatchPutFieldOptions\BatchPutFieldOptionsTrait;
    use CreateCase\CreateCaseTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateField\CreateFieldTrait;
    use CreateLayout\CreateLayoutTrait;
    use CreateRelatedItem\CreateRelatedItemTrait;
    use CreateTemplate\CreateTemplateTrait;
    use DeleteDomain\DeleteDomainTrait;
    use GetCase\GetCaseTrait;
    use GetCaseEventConfiguration\GetCaseEventConfigurationTrait;
    use GetDomain\GetDomainTrait;
    use GetLayout\GetLayoutTrait;
    use GetTemplate\GetTemplateTrait;
    use ListCasesForContact\ListCasesForContactTrait;
    use ListDomains\ListDomainsTrait;
    use ListFieldOptions\ListFieldOptionsTrait;
    use ListFields\ListFieldsTrait;
    use ListLayouts\ListLayoutsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTemplates\ListTemplatesTrait;
    use PutCaseEventConfiguration\PutCaseEventConfigurationTrait;
    use SearchCases\SearchCasesTrait;
    use SearchRelatedItems\SearchRelatedItemsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCase\UpdateCaseTrait;
    use UpdateField\UpdateFieldTrait;
    use UpdateLayout\UpdateLayoutTrait;
    use UpdateTemplate\UpdateTemplateTrait;
}
