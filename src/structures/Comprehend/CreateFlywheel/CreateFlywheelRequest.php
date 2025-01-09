<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateFlywheel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelName
 * @property string $ActiveModelArn
 * @property string $DataAccessRoleArn
 * @property Shapes\TaskConfig $TaskConfig
 * @property 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER' $ModelType
 * @property string $DataLakeS3Uri
 * @property Shapes\DataSecurityConfig $DataSecurityConfig
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateFlywheelRequest extends Request
{
    /**
     * @param array{
     *     FlywheelName: string,
     *     ActiveModelArn?: string,
     *     DataAccessRoleArn: string,
     *     TaskConfig?: Shapes\TaskConfig,
     *     ModelType?: 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER',
     *     DataLakeS3Uri: string,
     *     DataSecurityConfig?: Shapes\DataSecurityConfig,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
