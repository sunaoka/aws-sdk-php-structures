<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService;

class AppIntegrationsServiceClient extends \Aws\AppIntegrationsService\AppIntegrationsServiceClient
{
    use CreateDataIntegration\CreateDataIntegrationTrait;
    use CreateEventIntegration\CreateEventIntegrationTrait;
    use DeleteDataIntegration\DeleteDataIntegrationTrait;
    use DeleteEventIntegration\DeleteEventIntegrationTrait;
    use GetDataIntegration\GetDataIntegrationTrait;
    use GetEventIntegration\GetEventIntegrationTrait;
    use ListDataIntegrationAssociations\ListDataIntegrationAssociationsTrait;
    use ListDataIntegrations\ListDataIntegrationsTrait;
    use ListEventIntegrationAssociations\ListEventIntegrationAssociationsTrait;
    use ListEventIntegrations\ListEventIntegrationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataIntegration\UpdateDataIntegrationTrait;
    use UpdateEventIntegration\UpdateEventIntegrationTrait;
}
