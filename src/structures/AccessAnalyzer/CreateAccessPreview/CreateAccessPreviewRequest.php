<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property array<string, Shapes\Configuration> $configurations
 * @property string $clientToken
 */
class CreateAccessPreviewRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     configurations: array<string, Shapes\Configuration>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
