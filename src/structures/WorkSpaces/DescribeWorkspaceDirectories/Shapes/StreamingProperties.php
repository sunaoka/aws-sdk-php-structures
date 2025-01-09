<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'UDP' $StreamingExperiencePreferredProtocol
 * @property list<UserSetting> $UserSettings
 * @property list<StorageConnector> $StorageConnectors
 * @property GlobalAcceleratorForDirectory $GlobalAccelerator
 */
class StreamingProperties extends Shape
{
    /**
     * @param array{
     *     StreamingExperiencePreferredProtocol?: 'TCP'|'UDP',
     *     UserSettings?: list<UserSetting>,
     *     StorageConnectors?: list<StorageConnector>,
     *     GlobalAccelerator?: GlobalAcceleratorForDirectory
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
