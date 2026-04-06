<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetPersonalizedRanking;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 * @property list<string> $inputList
 * @property string $userId
 * @property array<string, string>|null $context
 * @property string|null $filterArn
 * @property array<string, string>|null $filterValues
 * @property array<string, list<string>>|null $metadataColumns
 */
class GetPersonalizedRankingRequest extends Request
{
    /**
     * @param array{
     *     campaignArn: string,
     *     inputList: list<string>,
     *     userId: string,
     *     context?: array<string, string>|null,
     *     filterArn?: string|null,
     *     filterValues?: array<string, string>|null,
     *     metadataColumns?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
