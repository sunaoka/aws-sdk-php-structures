<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreSkillsByCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $CategoryId
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListSkillsStoreSkillsByCategoryRequest extends Request
{
    /**
     * @param array{
     *     CategoryId: int<1, max>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
