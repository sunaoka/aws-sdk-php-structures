<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 * @property string $itemId
 * @property string $userId
 * @property int<0, max> $numResults
 * @property array<string, string> $context
 * @property string $filterArn
 * @property array<string, string> $filterValues
 * @property string $recommenderArn
 * @property list<Shapes\Promotion> $promotions
 * @property array<string, list<string>> $metadataColumns
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     campaignArn?: string,
     *     itemId?: string,
     *     userId?: string,
     *     numResults?: int<0, max>,
     *     context?: array<string, string>,
     *     filterArn?: string,
     *     filterValues?: array<string, string>,
     *     recommenderArn?: string,
     *     promotions?: list<Shapes\Promotion>,
     *     metadataColumns?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
