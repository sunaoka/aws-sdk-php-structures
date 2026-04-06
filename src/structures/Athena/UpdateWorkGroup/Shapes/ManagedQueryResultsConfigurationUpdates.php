<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property ManagedQueryResultsEncryptionConfiguration|null $EncryptionConfiguration
 * @property bool|null $RemoveEncryptionConfiguration
 */
class ManagedQueryResultsConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     EncryptionConfiguration?: ManagedQueryResultsEncryptionConfiguration|null,
     *     RemoveEncryptionConfiguration?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
