<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceModelVersionArn
 * @property string $ModelName
 * @property string $DatasetName
 * @property Shapes\LabelsInputConfiguration $LabelsInputConfiguration
 * @property string $ClientToken
 * @property string $RoleArn
 * @property string $ServerSideKmsKeyId
 * @property list<Shapes\Tag> $Tags
 * @property 'NO_IMPORT'|'ADD_WHEN_EMPTY'|'OVERWRITE' $InferenceDataImportStrategy
 */
class ImportModelVersionRequest extends Request
{
    /**
     * @param array{
     *     SourceModelVersionArn: string,
     *     ModelName?: string,
     *     DatasetName: string,
     *     LabelsInputConfiguration?: Shapes\LabelsInputConfiguration,
     *     ClientToken: string,
     *     RoleArn?: string,
     *     ServerSideKmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     InferenceDataImportStrategy?: 'NO_IMPORT'|'ADD_WHEN_EMPTY'|'OVERWRITE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
