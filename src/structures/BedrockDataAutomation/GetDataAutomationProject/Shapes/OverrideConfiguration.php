<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentOverrideConfiguration|null $document
 * @property ImageOverrideConfiguration|null $image
 * @property VideoOverrideConfiguration|null $video
 * @property AudioOverrideConfiguration|null $audio
 * @property ModalityRoutingConfiguration|null $modalityRouting
 */
class OverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     document?: DocumentOverrideConfiguration|null,
     *     image?: ImageOverrideConfiguration|null,
     *     video?: VideoOverrideConfiguration|null,
     *     audio?: AudioOverrideConfiguration|null,
     *     modalityRouting?: ModalityRoutingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
