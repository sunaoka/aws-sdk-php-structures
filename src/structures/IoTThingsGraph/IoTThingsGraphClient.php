<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph;

class IoTThingsGraphClient extends \Aws\IoTThingsGraph\IoTThingsGraphClient
{
    use AssociateEntityToThing\AssociateEntityToThingTrait;
    use CreateFlowTemplate\CreateFlowTemplateTrait;
    use CreateSystemInstance\CreateSystemInstanceTrait;
    use CreateSystemTemplate\CreateSystemTemplateTrait;
    use DeleteFlowTemplate\DeleteFlowTemplateTrait;
    use DeleteNamespace\DeleteNamespaceTrait;
    use DeleteSystemInstance\DeleteSystemInstanceTrait;
    use DeleteSystemTemplate\DeleteSystemTemplateTrait;
    use DeploySystemInstance\DeploySystemInstanceTrait;
    use DeprecateFlowTemplate\DeprecateFlowTemplateTrait;
    use DeprecateSystemTemplate\DeprecateSystemTemplateTrait;
    use DescribeNamespace\DescribeNamespaceTrait;
    use DissociateEntityFromThing\DissociateEntityFromThingTrait;
    use GetEntities\GetEntitiesTrait;
    use GetFlowTemplate\GetFlowTemplateTrait;
    use GetFlowTemplateRevisions\GetFlowTemplateRevisionsTrait;
    use GetNamespaceDeletionStatus\GetNamespaceDeletionStatusTrait;
    use GetSystemInstance\GetSystemInstanceTrait;
    use GetSystemTemplate\GetSystemTemplateTrait;
    use GetSystemTemplateRevisions\GetSystemTemplateRevisionsTrait;
    use GetUploadStatus\GetUploadStatusTrait;
    use ListFlowExecutionMessages\ListFlowExecutionMessagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SearchEntities\SearchEntitiesTrait;
    use SearchFlowExecutions\SearchFlowExecutionsTrait;
    use SearchFlowTemplates\SearchFlowTemplatesTrait;
    use SearchSystemInstances\SearchSystemInstancesTrait;
    use SearchSystemTemplates\SearchSystemTemplatesTrait;
    use SearchThings\SearchThingsTrait;
    use TagResource\TagResourceTrait;
    use UndeploySystemInstance\UndeploySystemInstanceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateFlowTemplate\UpdateFlowTemplateTrait;
    use UpdateSystemTemplate\UpdateSystemTemplateTrait;
    use UploadEntityDefinitions\UploadEntityDefinitionsTrait;
}
