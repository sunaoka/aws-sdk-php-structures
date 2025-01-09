<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $idempotencyToken
 * @property Shapes\LayoutConfiguration $layout
 * @property list<Shapes\DestinationConfiguration> $destinations
 * @property array<string, string> $tags
 */
class StartCompositionRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     idempotencyToken?: string,
     *     layout?: Shapes\LayoutConfiguration,
     *     destinations: list<Shapes\DestinationConfiguration>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
