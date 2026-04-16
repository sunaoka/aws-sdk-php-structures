<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteRecommenderSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderSchemaName
 */
class DeleteRecommenderSchemaRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderSchemaName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
