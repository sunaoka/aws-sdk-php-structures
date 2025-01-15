<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceModelVersionArn
 * @property string|null $ModelName
 * @property string $DatasetName
 * @property Shapes\LabelsInputConfiguration|null $LabelsInputConfiguration
 * @property string $ClientToken
 * @property string|null $RoleArn
 * @property string|null $ServerSideKmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 * @property 'NO_IMPORT'|'ADD_WHEN_EMPTY'|'OVERWRITE'|null $InferenceDataImportStrategy
 */
class ImportModelVersionRequest extends Request
{
    /**
     * @param array{
     *     SourceModelVersionArn: string,
     *     ModelName?: string|null,
     *     DatasetName: string,
     *     LabelsInputConfiguration?: Shapes\LabelsInputConfiguration|null,
     *     ClientToken: string,
     *     RoleArn?: string|null,
     *     ServerSideKmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     InferenceDataImportStrategy?: 'NO_IMPORT'|'ADD_WHEN_EMPTY'|'OVERWRITE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
