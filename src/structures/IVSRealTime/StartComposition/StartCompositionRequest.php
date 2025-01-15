<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string|null $idempotencyToken
 * @property Shapes\LayoutConfiguration|null $layout
 * @property list<Shapes\DestinationConfiguration> $destinations
 * @property array<string, string>|null $tags
 */
class StartCompositionRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     idempotencyToken?: string|null,
     *     layout?: Shapes\LayoutConfiguration|null,
     *     destinations: list<Shapes\DestinationConfiguration>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
