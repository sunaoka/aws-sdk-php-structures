<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutAggregationAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthorizedAccountId
 * @property string $AuthorizedAwsRegion
 * @property list<Shapes\Tag> $Tags
 */
class PutAggregationAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     AuthorizedAccountId: string,
     *     AuthorizedAwsRegion: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
