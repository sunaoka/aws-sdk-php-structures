<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MouseClickArguments|null $mouseClick
 * @property MouseMoveArguments|null $mouseMove
 * @property MouseDragArguments|null $mouseDrag
 * @property MouseScrollArguments|null $mouseScroll
 * @property KeyTypeArguments|null $keyType
 * @property KeyPressArguments|null $keyPress
 * @property KeyShortcutArguments|null $keyShortcut
 * @property ScreenshotArguments|null $screenshot
 */
class BrowserAction extends Shape
{
    /**
     * @param array{
     *     mouseClick?: MouseClickArguments|null,
     *     mouseMove?: MouseMoveArguments|null,
     *     mouseDrag?: MouseDragArguments|null,
     *     mouseScroll?: MouseScrollArguments|null,
     *     keyType?: KeyTypeArguments|null,
     *     keyPress?: KeyPressArguments|null,
     *     keyShortcut?: KeyShortcutArguments|null,
     *     screenshot?: ScreenshotArguments|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
