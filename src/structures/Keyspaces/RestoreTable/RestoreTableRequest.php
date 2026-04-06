<?php

namespace Sunaoka\Aws\Structures\Keyspaces\RestoreTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceKeyspaceName
 * @property string $sourceTableName
 * @property string $targetKeyspaceName
 * @property string $targetTableName
 * @property \Aws\Api\DateTimeResult|null $restoreTimestamp
 * @property Shapes\CapacitySpecification|null $capacitySpecificationOverride
 * @property Shapes\EncryptionSpecification|null $encryptionSpecificationOverride
 * @property Shapes\PointInTimeRecovery|null $pointInTimeRecoveryOverride
 * @property list<Shapes\Tag>|null $tagsOverride
 */
class RestoreTableRequest extends Request
{
    /**
     * @param array{
     *     sourceKeyspaceName: string,
     *     sourceTableName: string,
     *     targetKeyspaceName: string,
     *     targetTableName: string,
     *     restoreTimestamp?: \Aws\Api\DateTimeResult|null,
     *     capacitySpecificationOverride?: Shapes\CapacitySpecification|null,
     *     encryptionSpecificationOverride?: Shapes\EncryptionSpecification|null,
     *     pointInTimeRecoveryOverride?: Shapes\PointInTimeRecovery|null,
     *     tagsOverride?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
