<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $campaignArn
 * @property string|null $itemId
 * @property string|null $userId
 * @property int<0, max>|null $numResults
 * @property array<string, string>|null $context
 * @property string|null $filterArn
 * @property array<string, string>|null $filterValues
 * @property string|null $recommenderArn
 * @property list<Shapes\Promotion>|null $promotions
 * @property array<string, list<string>>|null $metadataColumns
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     campaignArn?: string|null,
     *     itemId?: string|null,
     *     userId?: string|null,
     *     numResults?: int<0, max>|null,
     *     context?: array<string, string>|null,
     *     filterArn?: string|null,
     *     filterValues?: array<string, string>|null,
     *     recommenderArn?: string|null,
     *     promotions?: list<Shapes\Promotion>|null,
     *     metadataColumns?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
