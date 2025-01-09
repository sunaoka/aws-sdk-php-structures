<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPreviewId
 * @property string $analyzerArn
 */
class GetAccessPreviewRequest extends Request
{
    /**
     * @param array{
     *     accessPreviewId: string,
     *     analyzerArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
