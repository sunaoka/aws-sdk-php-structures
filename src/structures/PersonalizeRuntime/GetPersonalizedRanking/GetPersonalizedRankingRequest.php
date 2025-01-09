<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetPersonalizedRanking;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 * @property list<string> $inputList
 * @property string $userId
 * @property array<string, string> $context
 * @property string $filterArn
 * @property array<string, string> $filterValues
 * @property array<string, list<string>> $metadataColumns
 */
class GetPersonalizedRankingRequest extends Request
{
    /**
     * @param array{
     *     campaignArn: string,
     *     inputList: list<string>,
     *     userId: string,
     *     context?: array<string, string>,
     *     filterArn?: string,
     *     filterValues?: array<string, string>,
     *     metadataColumns?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
