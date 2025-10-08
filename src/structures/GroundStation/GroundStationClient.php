<?php

namespace Sunaoka\Aws\Structures\GroundStation;

class GroundStationClient extends \Aws\GroundStation\GroundStationClient
{
    use CancelContact\CancelContactTrait;
    use CreateConfig\CreateConfigTrait;
    use CreateDataflowEndpointGroup\CreateDataflowEndpointGroupTrait;
    use CreateEphemeris\CreateEphemerisTrait;
    use CreateMissionProfile\CreateMissionProfileTrait;
    use DeleteConfig\DeleteConfigTrait;
    use DeleteDataflowEndpointGroup\DeleteDataflowEndpointGroupTrait;
    use DeleteEphemeris\DeleteEphemerisTrait;
    use DeleteMissionProfile\DeleteMissionProfileTrait;
    use DescribeContact\DescribeContactTrait;
    use DescribeEphemeris\DescribeEphemerisTrait;
    use GetAgentConfiguration\GetAgentConfigurationTrait;
    use GetDataflowEndpointGroup\GetDataflowEndpointGroupTrait;
    use GetMinuteUsage\GetMinuteUsageTrait;
    use GetMissionProfile\GetMissionProfileTrait;
    use GetSatellite\GetSatelliteTrait;
    use ListConfigs\ListConfigsTrait;
    use ListContacts\ListContactsTrait;
    use ListDataflowEndpointGroups\ListDataflowEndpointGroupsTrait;
    use ListEphemerides\ListEphemeridesTrait;
    use ListGroundStations\ListGroundStationsTrait;
    use ListMissionProfiles\ListMissionProfilesTrait;
    use ListSatellites\ListSatellitesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterAgent\RegisterAgentTrait;
    use ReserveContact\ReserveContactTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAgentStatus\UpdateAgentStatusTrait;
    use UpdateConfig\UpdateConfigTrait;
    use UpdateEphemeris\UpdateEphemerisTrait;
    use UpdateMissionProfile\UpdateMissionProfileTrait;
    use GetMissionProfileConfig\GetMissionProfileConfigTrait;
}
