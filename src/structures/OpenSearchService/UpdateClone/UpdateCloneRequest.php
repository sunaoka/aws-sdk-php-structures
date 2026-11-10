<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateClone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\TrafficSplitRequestOptions|null $TrafficSplitOptions
 * @property Shapes\CutoverRequestOptions|null $CutoverOptions
 * @property Shapes\RetentionOptions|null $RetentionOptions
 */
class UpdateCloneRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TrafficSplitOptions?: Shapes\TrafficSplitRequestOptions|null,
     *     CutoverOptions?: Shapes\CutoverRequestOptions|null,
     *     RetentionOptions?: Shapes\RetentionOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
