<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutoAcceptConfig>|null $AutoAcceptConfigs
 * @property list<Shapes\AfterContactWorkConfigPerChannel>|null $AfterContactWorkConfigs
 * @property list<Shapes\PhoneNumberConfig>|null $PhoneNumberConfigs
 * @property list<Shapes\PersistentConnectionConfig>|null $PersistentConnectionConfigs
 * @property list<Shapes\VoiceEnhancementConfig>|null $VoiceEnhancementConfigs
 * @property string $UserId
 * @property string $InstanceId
 */
class UpdateUserConfigRequest extends Request
{
    /**
     * @param array{
     *     AutoAcceptConfigs?: list<Shapes\AutoAcceptConfig>|null,
     *     AfterContactWorkConfigs?: list<Shapes\AfterContactWorkConfigPerChannel>|null,
     *     PhoneNumberConfigs?: list<Shapes\PhoneNumberConfig>|null,
     *     PersistentConnectionConfigs?: list<Shapes\PersistentConnectionConfig>|null,
     *     VoiceEnhancementConfigs?: list<Shapes\VoiceEnhancementConfig>|null,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
