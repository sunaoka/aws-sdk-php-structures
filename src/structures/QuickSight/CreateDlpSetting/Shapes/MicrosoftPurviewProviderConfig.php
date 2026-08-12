<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDlpSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MicrosoftPurviewCredentials $Credentials
 * @property list<LabelActionMapping> $LabelActionMappings
 * @property 'ALLOW'|'WARN'|'BLOCK' $UnmappedAction
 */
class MicrosoftPurviewProviderConfig extends Shape
{
    /**
     * @param array{
     *     Credentials: MicrosoftPurviewCredentials,
     *     LabelActionMappings: list<LabelActionMapping>,
     *     UnmappedAction: 'ALLOW'|'WARN'|'BLOCK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
