<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD_MESSAGES' $RespondsTo
 * @property InvokedBy $InvokedBy
 * @property string $LexBotAliasArn
 * @property string $LocaleId
 * @property string $WelcomeIntent
 */
class LexConfiguration extends Shape
{
    /**
     * @param array{
     *     RespondsTo?: 'STANDARD_MESSAGES',
     *     InvokedBy?: InvokedBy,
     *     LexBotAliasArn: string,
     *     LocaleId: string,
     *     WelcomeIntent?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
