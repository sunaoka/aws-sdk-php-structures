<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateFlywheel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelName
 * @property string|null $ActiveModelArn
 * @property string $DataAccessRoleArn
 * @property Shapes\TaskConfig|null $TaskConfig
 * @property 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER'|null $ModelType
 * @property string $DataLakeS3Uri
 * @property Shapes\DataSecurityConfig|null $DataSecurityConfig
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFlywheelRequest extends Request
{
    /**
     * @param array{
     *     FlywheelName: string,
     *     ActiveModelArn?: string|null,
     *     DataAccessRoleArn: string,
     *     TaskConfig?: Shapes\TaskConfig|null,
     *     ModelType?: 'DOCUMENT_CLASSIFIER'|'ENTITY_RECOGNIZER'|null,
     *     DataLakeS3Uri: string,
     *     DataSecurityConfig?: Shapes\DataSecurityConfig|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
