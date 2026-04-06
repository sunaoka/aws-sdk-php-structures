<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CbetCheckDigitString
 * @property 'DISABLED'|'ENABLED' $CbetStepaside
 * @property string $Csid
 */
class NielsenCBET extends Shape
{
    /**
     * @param array{
     *     CbetCheckDigitString: string,
     *     CbetStepaside: 'DISABLED'|'ENABLED',
     *     Csid: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
