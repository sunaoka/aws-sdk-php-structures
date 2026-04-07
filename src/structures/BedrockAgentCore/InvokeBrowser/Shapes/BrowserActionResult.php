<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MouseClickResult|null $mouseClick
 * @property MouseMoveResult|null $mouseMove
 * @property MouseDragResult|null $mouseDrag
 * @property MouseScrollResult|null $mouseScroll
 * @property KeyTypeResult|null $keyType
 * @property KeyPressResult|null $keyPress
 * @property KeyShortcutResult|null $keyShortcut
 * @property ScreenshotResult|null $screenshot
 */
class BrowserActionResult extends Shape
{
    /**
     * @param array{
     *     mouseClick?: MouseClickResult|null,
     *     mouseMove?: MouseMoveResult|null,
     *     mouseDrag?: MouseDragResult|null,
     *     mouseScroll?: MouseScrollResult|null,
     *     keyType?: KeyTypeResult|null,
     *     keyPress?: KeyPressResult|null,
     *     keyShortcut?: KeyShortcutResult|null,
     *     screenshot?: ScreenshotResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
