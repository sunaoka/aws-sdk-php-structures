<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD_MESSAGES'|null $RespondsTo
 * @property InvokedBy|null $InvokedBy
 * @property string $LexBotAliasArn
 * @property string $LocaleId
 * @property string|null $WelcomeIntent
 */
class LexConfiguration extends Shape
{
    /**
     * @param array{
     *     RespondsTo?: 'STANDARD_MESSAGES'|null,
     *     InvokedBy?: InvokedBy|null,
     *     LexBotAliasArn: string,
     *     LocaleId: string,
     *     WelcomeIntent?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
