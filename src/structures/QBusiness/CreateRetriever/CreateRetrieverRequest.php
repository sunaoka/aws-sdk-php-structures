<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property 'NATIVE_INDEX'|'KENDRA_INDEX' $type
 * @property string $displayName
 * @property Shapes\RetrieverConfiguration $configuration
 * @property string|null $roleArn
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRetrieverRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     type: 'NATIVE_INDEX'|'KENDRA_INDEX',
     *     displayName: string,
     *     configuration: Shapes\RetrieverConfiguration,
     *     roleArn?: string|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
