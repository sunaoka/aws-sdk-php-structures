<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null $jpeg
 * @property 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null $png
 * @property 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null $mp4
 * @property 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null $mov
 */
class ModalityRoutingConfiguration extends Shape
{
    /**
     * @param array{
     *     jpeg?: 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null,
     *     png?: 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null,
     *     mp4?: 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null,
     *     mov?: 'IMAGE'|'DOCUMENT'|'AUDIO'|'VIDEO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
