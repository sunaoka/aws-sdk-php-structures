<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'UDP'|null $StreamingExperiencePreferredProtocol
 * @property list<UserSetting>|null $UserSettings
 * @property list<StorageConnector>|null $StorageConnectors
 * @property GlobalAcceleratorForDirectory|null $GlobalAccelerator
 */
class StreamingProperties extends Shape
{
    /**
     * @param array{
     *     StreamingExperiencePreferredProtocol?: 'TCP'|'UDP'|null,
     *     UserSettings?: list<UserSetting>|null,
     *     StorageConnectors?: list<StorageConnector>|null,
     *     GlobalAccelerator?: GlobalAcceleratorForDirectory|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
